import javax.swing.*;
import java.awt.event.*;

public class test {
	static String strEmail;
	static String strPassword;

	public static void main(String[] args) {
		JFrame frmLogin = new JFrame("Title");// creating instance of JFrame
		
		JTextField txtEmail = new JTextField();
		txtEmail.setBounds(50, 10, 150, 40);
		
		JPasswordField pwdPassword = new JPasswordField();
		pwdPassword.setBounds(210, 10, 150, 40);
		
		JTextField txtOutput = new JTextField();
		txtOutput.setBounds(50, 100, 150, 40);
		
		JPanel pnlLoginForm = new JPanel();
		pnlLoginForm.setBounds(200,100,400, 400);

		JButton btnSubmit = new JButton("click");// creating instance of JButton
		btnSubmit.setBounds(50, 50, 100, 40);
		btnSubmit.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				strEmail = txtEmail.getText();
				strPassword = String.valueOf(pwdPassword.getPassword());
				
				txtOutput.setText(strEmail + " " + strPassword);
			}
		});
		
		frmLogin.setSize(800, 700);// 400 width and 500 height
		frmLogin.setLayout(null);// using no layout managers
		frmLogin.setVisible(true);// making the frame visible

		pnlLoginForm.add(btnSubmit);// adding button in JFrame
		pnlLoginForm.add(txtEmail);
		pnlLoginForm.add(pwdPassword);
		pnlLoginForm.add(txtOutput);
		
		frmLogin.add(pnlLoginForm);
	}
}

