<?php

session_start();


include_once (dirname(__FILE__) . "/../../../webservice/cliente/zimbra/ZimbraCliente.php");


class CorreosZimbra {

    private $zimbra_cliente = null;

    public function __construct() {
        $this->zimbra_cliente = new ZimbraCliente();
    }

    public function testfunction() {
        return $this->zimbra_cliente->getZimbraAccounts();
    }

    public function check_available_email($email)
    {
        $disponible = $this->zimbra_cliente->check_available_email($email);
        return $disponible;
    }

    public function create_account($data)
    {
        $result = $this->zimbra_cliente->create_account($data);
        return $result;
    }

    public function delete_account_by_id($id_zimbra)
    {
        $result = $this->zimbra_cliente->delete_account($id_zimbra);
        return $result;
    }



}

@$action = $_POST["action"];
@$usuario = $_POST["usuario"];
@$email = $_POST["email"];
@$data = $_POST["data_email"];
@$id_zimbra = $_POST["id_zimbra"];

if ($action !== '') {
    $correos = new CorreosZimbra();

    switch ($action) {
        case 'check_available_email':
            $disponible = $correos->check_available_email($email);
            if ($disponible) {
                $result = array('status' => 'success');
                echo json_encode($result);
                exit();
            }else{
                $result = array('status' => 'error','msg' => 'El correo '.$email.' no esta disponible');
                echo json_encode($result);
                exit();
            }
            break;
        case 'create_account':
            // separar propiedades de elementos necesarios para la cuenta, segun lo requiere zimbra
            /*
            *
            * $values['name'] = 'uid@name' Must include existing domain
            * $values['password'] = New account's password
            * $values['attributes'] = Optional (0 or more)  Attributes
            *
            */
            $values['name'] = $data['email'];
            $values['password'] = $data['pwd'];
            // preferred name to be used when displaying entries
            $values['displayName'] = $data['nombre'].' '.$data['paterno'].' '.$data['materno'];
            // first name(s) for which the entity is known by
            $values['givenName'] = $data['nombre'];
            // last (family) name(s) for which the entity is known by
            $values['sn'] = $data['paterno'];
            // Telephone Number
            $values['telephoneNumber'] = $data['telefono'];
            // home telephone number
            $values['homePhone'] = $data['telefono2'];
            // mobile telephone number
            $values['mobile'] = $data['movil'];
            // zona horaria
            $values['zimbraPrefTimeZoneId'] = $data['zona_horaria'];

            $account = $correos->create_account($values);
            if ($account) {
                $result = array('status' => 'success','idZimbra' => $account->get('id'));
                echo json_encode($result);
                exit();
            }else{
                $result = array('status' => 'error','msg' => 'No se pudo guardar el correo, genera uno nuevo y vuelve a intentarlo');
                echo json_encode($result);
                exit();
            }
            break;
        case 'delete_account':
            // elimina cuenta por id
            $result = $correos->delete_account_by_id($id_zimbra);
            if ($result) {
                $result = array('status' => 'success');
                echo json_encode($result);
                exit();
            }else{
                $result = array('status' => 'error');
                echo json_encode($result);
                exit();
            }
            break;
        default:
            # code...
            break;
    }



}
