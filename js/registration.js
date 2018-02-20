function validateRegistration() {

	var a = document.getElementById('nameD').value;
	var b = document.getElementById('usernameD').value;
	var c = document.getElementById('pwdD').value;
	var d = document.getElementById('pwdConfirmD').value;
	var e = document.getElementById('emailD').value;
	var b1 = b.length;


    if(lastnameTF.getText().isEmpty()||firstnameTF.getText().isEmpty()||usernameTF.getText().isEmpty()||firstPassword.isEmpty()||secondPassword.isEmpty())
    {
    	JOptionPane.showMessageDialog(null, "You entered incomplete information.","Access",JOptionPane.ERROR_MESSAGE);
    
    }

    else if(!(firstnameTF.getText().matches("[a-zA-Z\\s]+")))
    { 	       	
        	 JOptionPane.showMessageDialog(null, "Invalid Firstname.","Access",JOptionPane.ERROR_MESSAGE);
             firstnameTF.setText("");
    }
       
    else if(!(lastnameTF.getText().matches("[a-zA-Z\\s]+")))
    {         
        	JOptionPane.showMessageDialog(null, "Invalid Lastname.","Access",JOptionPane.ERROR_MESSAGE);
            lastnameTF.setText("");
    }

    else if(ConnectDB2.isUsernameExist(usernameTF.getText())||usernameTF.getText().toUpperCase().equals("ADMIN"))
    {
        	JOptionPane.showMessageDialog(null, "Username Already Used.","Access",JOptionPane.ERROR_MESSAGE);
            usernameTF.setText("");
    }

    else if(!(((firstPassword.length()>=8)&&(firstPassword.length()<=16))&&((secondPassword.length()>=8)&&(secondPassword.length()<=16))))
    {
        	JOptionPane.showMessageDialog(null, "Invalid Password.","Access",JOptionPane.ERROR_MESSAGE);
  			passwordTF.setText("");
  			confirmpasswordTF.setText("");
    }

    else
    {
    	if(firstPassword.equals(secondPassword))
        {
        	String ValidPassword = confirmpasswordTF.getText();
           	ConnectDB2.enterDataOnDatabase(username, ValidPassword, firstname, lastname, "E");
           	JOptionPane.showMessageDialog(null, "Registration Success.","Access",JOptionPane.INFORMATION_MESSAGE);  
            signupFrame.setVisible(false);
            new Login();                      
        }

        else
        {
            JOptionPane.showMessageDialog(null, "Password doesn't match.","Access",JOptionPane.ERROR_MESSAGE);
            firstPassword = "";
            secondPassword = "";
            passwordTF.setText("");
            confirmpasswordTF.setText("");
        }
    }

}	