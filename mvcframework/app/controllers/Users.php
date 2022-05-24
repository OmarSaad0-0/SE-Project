<?php
class Users extends Controller {
    public function __construct() {
        $this->userModel = $this->model('User');
    }

    public function register() {
        $data = [
            
            'Fname' => '',
            'Lname' => '',
            'Bname' => '',
            'Email' => '',
            'Password' => '',
            'Number' => '',
            'Confirmpass' => '',
            'FnameError' => '',
            'LnameError' => '',
            'BnameError' => '',
            'emailError' => '',
            'numberError' => '',
            'passwordError' => '',
            'confirmPasswordError' => ''
        ];

      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Process form
        // Sanitize POST data
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

              $data = [
                'Fname' => trim($_POST['Fname']),
                'Lname' => trim($_POST['Lname']),
                'Bname' => trim($_POST['Bname']),
                'Email' => trim($_POST['Email']),
                'Password' => trim($_POST['Password']),
                'Number' => trim($_POST['Number']),
                'Confirmpass' => trim($_POST['Cpassword']),
                'FnameError' => '',
                'LnameError' => '',
                'BnameError' => '',
                'numberError' => '',
                'emailError' => '',
                'numberError' => '',
                'passwordError' => '',
                'confirmPasswordError' => ''
            ];

            $nameValidation = "/^[a-zA-Z]*$/";
            $passwordValidation = "/^(.{0,7}|[^a-z]*|[^\d]*)$/i";
            $numberValidation="/^[0-9]*$/";

            //Validate FirstName on letters

            if (empty($data['Fname'])) {
                $data['FnameError'] = 'Please Enter Your First Name.';
            } elseif (!preg_match($nameValidation, $data['Fname'])) {
                $data['FnameError'] = 'Name can only contain Letters';
            }

            //Validate LastName on letters
            if (empty($data['Lname'])) {
                $data['LnameError'] = 'Please Enter Your Last Name.';
            } elseif (!preg_match($nameValidation, $data['Lname'])) {
                $data['LnameError'] = 'Last Name can only contain Letters';
            }

            //Validate BrandName on letters
            if (empty($data['Bname'])) {
                $data['BnameError'] = 'Please Enter Your Brand Name.';
            } elseif (!preg_match($nameValidation, $data['Lname'])) {
                $data['BnameError'] = 'Brand Name can only contain Letters';
            }

            //Validate Phone_Number on Numbers
            if (empty($data['Number'])) {
                $data['numberError'] = 'Please Enter Your Phone Number.';
            } elseif (!preg_match($numberValidation, $data['Number'])) {
                $data['numberError'] = 'Phone Number can only contain Numbers';
            }



            //Validate email
            if (empty($data['Email'])) {
                $data['emailError'] = 'Please enter an email address.';
            } elseif (!filter_var($data['Email'], FILTER_VALIDATE_EMAIL)) {
                $data['emailError'] = 'Please The Correct Email Format.';
            } 
                //Check if email exists.
              elseif ($this->userModel->findUserByEmail($data['Email'])) 
                {
                $data['emailError'] = 'Email Is Already Taken.';
                }
            

           // Validate password on length, numeric values,
            if(empty($data['Password'])){
              $data['passwordError'] = 'Please enter a password.';
            } elseif(strlen($data['Password']) < 6){
              $data['passwordError'] = 'Password must be at least 8 characters';
            } elseif (preg_match($passwordValidation, $data['Password'])) {
              $data['passwordError'] = 'Password must have at least one numeric value.';
            }

            //Validate confirm password
             if (empty($data['Confirmpass'])) {
                $data['confirmPasswordError'] = 'Please enter password.';
            } else {
                if ($data['Password'] != $data['Confirmpass']) {
                $data['confirmPasswordError'] = 'Passwords do not match, please try again.';
                }
            }

            // Make sure that errors are empty
            if (empty($data['nameError']) && empty($data['emailError']) && empty($data['passwordError']) && empty($data['confirmPasswordError'])) {

                // Hash password
                $data['Password'] = password_hash($data['Password'], PASSWORD_DEFAULT);

                //Register user from model function
                if ($this->userModel->register($data)) {
                    //Redirect to the login page
                    header('location: ' . URLROOT . '/users/login');
                } else {
                    die('Something went wrong.');
                }
            }
        }
        $this->view('users/register', $data);
    }

/******************************************************* */
public function login() {
    $data = [
        'title' => 'Login page',
        'Email' => '',
        'Password' => '',
        'emailError' => '',
        'passwordError' => ''
    ];

    //Check for post
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        //Sanitize post data
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING); 

        $data = [
            'Email' => trim($_POST['email']),
            'Password' => trim($_POST['Pass']),
            'emailError' => '',
            'passwordError' => '',
        ];
        //Validate username
        if (empty($data['Email'])) {
            $data['emailError'] = 'Please Enter Your Em.';
        }

        //Validate password
        if (empty($data['Password'])) {
            $data['passwordError'] = 'Please Enter Your Password.';
        }

        //Check if all errors are empty
        if (empty($data['emailError']) && empty($data['emailPassword']))
         {    
             
            $loggedInUser = $this->userModel->login($data['Email'], $data['Password']);

            if ($loggedInUser) {
                $this->createUserSession($loggedInUser);
               
                
            } else {
                $data['passwordError'] = 'Password or Email is incorrect. Please try again.';

                $this->view('users/login', $data);
            }
        }

    } else {
        $data = [
            'Email' => '',
            'Password' => '',
            'emailError' => '',
            'passwordError' => ''
        ];
    }
    
    $this->view('users/login', $data);
    
}

public function createUserSession($user) {
    $_SESSION['Id'] = $user->Id;
    $_SESSION['First_Name'] = $user->First_Name;
    $_SESSION['Last_Name'] = $user->Last_Name;
    $_SESSION['First_Name'] = $user->First_Name;
    $_SESSION['Brand_Name'] = $user->Brand_Name;
    $_SESSION['User_Email'] = $user->User_Email;
    $_SESSION['User_Password'] = $user->User_Password;
    $_SESSION['First_Name'] = $user->First_Name;
    $_SESSION['User_Number'] = $user->User_Number;
    

    
    
    header('location:' . URLROOT . '/pages/register');
}

public function logout() {
    
    session_destroy();
   
   
    header('location:' . URLROOT . '/users/register');
}





public function profile(){

   

     $data = [

        
        'Id' => '',
        'Fnamee' => '',
        'Lnamee' => '',
        'Bnamee' => '',
        'Emaile' => '',
        
        'usernume' => '',
        
        
        'FnameError' => '',
        'LnameError' => '',
        'BnameError' => '',
        'emailError' => '',
        'numberError' => ''
        
        
    ];

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        
       

        $data = [

        
            'Id' => $_SESSION['Id'],
            'Fnamee' => $_POST['Fname'],
            'Lnamee' => $_POST['Lname'],
            'Bnamee' => $_POST['Bname'],
            'Emaile' => $_POST['Email'],
            
            'usernume' => $_POST['Number'],
            
            
            'FnameError' => '',
            'LnameError' => '',
            'BnameError' => '',
            'emailError' => '',
            'numberError' => '',
            
            
        ];

       
        
        $this->userModel->updateUser($data);
        $_SESSION['First_Name'] = $_POST['Fname'];
        $_SESSION['Last_Name'] = $_POST['Lname'];
        $_SESSION['Brand_Name'] = $_POST['Bname'];
        $_SESSION['User_Number'] = $_POST['Number'];
        $_SESSION['User_Email'] = $_POST['Email'];

        
      
    }


$this->view('users/profile',$data);


}

public function delete()
{
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

    
    $this->userModel->delete($_SESSION['Id']);
 

    session_destroy();
   
   
    header('location:' . URLROOT . '/users/register');
      
    


}
$this->view('users/profile',$data);
}

}