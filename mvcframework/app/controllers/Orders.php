<?php
class Orders extends Controller
{

 public function __construct()
 {
     $this->orderModel=$this->model('Order');
 }




 public function index()
 {
    $this->view('orders/index');
 }

public function Enter()
{
    $data = [
            
        'Base' => '',
        'Fabric' =>'' ,
        'Colour' => '',
        'Printing' =>'',
        'Quantity' => '',
        'Info' => '',
        'Time' => '',
        'Pr' => $this->orderModel->SelectPrint()
        
    ];

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    // Process form
    // Sanitize POST data
    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);



    $data = [
            
        'Base' => $_POST['Base'],
        'Fabric' =>$_POST['Fabric'] ,
        'Colour' => $_POST['Colour'],
        'Printing' => $_POST['Printing'],
        'Quantity' => $_POST['Quantity'],
        'Info' => $_POST['Info'],
        'Time' => $_POST['Time'],
        'Pr' => $this->orderModel->SelectPrint()
    ];

    $_SESSION['Base']=$data['Base'];
    $_SESSION['Fabric']=$data['Fabric'];
    $_SESSION['Colour']=$data['Colour'];
    $_SESSION['Printing']=$data['Printing'];
    $_SESSION['Quantity']=$data['Quantity'];
    $_SESSION['Info']=$data['Info'];
    $_SESSION['Time']=$data['Time'];

   $this->orderModel->InsOrder($data,$_SESSION['Id']);

  

}


$this->view('orders/Enter',$data);

}

}
