import java.awt.event.*;
import javax.swing.*;

public class A {
	public static void main(String[] a) {
//		DECLARATIONS
		JFrame frm = new JFrame("Java Program ito");
		
		JLabel lblFirstName = new JLabel("First Name");
		lblFirstName.setBounds(250, 50, 100, 30);
		
		JTextField txtFirstName = new JTextField();
		txtFirstName.setBounds(350, 50, 100, 30);
		txtFirstName.setEnabled(false);
		
		JLabel lblLastName = new JLabel("Last Name");
		lblLastName.setBounds(250, 100, 100, 30);
		
		JTextField txtLastName = new JTextField();
		txtLastName.setBounds(350, 100, 100, 30);
		txtLastName.setEnabled(false);
		
		JButton btnSubmit = new JButton("Submit");
		btnSubmit.setBounds(350, 150, 100, 50);
		btnSubmit.setEnabled(false);
		
		JLabel lblOutput = new JLabel("---");
		lblOutput.setBounds(350, 230, 500, 50);
		
		btnSubmit.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				String fname = txtFirstName.getText();
				String lname = txtLastName.getText();
				
				if(fname.equals("") && lname.equals("")) {
					lblOutput.setText("ENTER NAME");
				} else {
					lblOutput.setText("Hello " + fname + " " + lname + "!");
				}
			}
		});
		
		JRadioButton rbMale = new JRadioButton("Male");
		rbMale.setBounds(350, 280, 100, 50);
		rbMale.setSelected(true);
		
		JRadioButton rbFemale = new JRadioButton("Female");
		rbFemale.setBounds(350, 330, 100, 50);
		
		ButtonGroup rbGender = new ButtonGroup();
		rbGender.add(rbMale);
		rbGender.add(rbFemale);
		
		JCheckBox cbTerms = new JCheckBox("I accept the terms");
		cbTerms.setBounds(300, 380, 200, 50);
		
		cbTerms.addItemListener(new ItemListener() {
			public void itemStateChanged(ItemEvent e) {
				if(cbTerms.isSelected()) {
					btnSubmit.setEnabled(true);
					txtFirstName.setEnabled(true);
					txtLastName.setEnabled(true);
				} else {
					btnSubmit.setEnabled(false);
					txtFirstName.setEnabled(false);
					txtLastName.setEnabled(false);
				}
			}
		});
		
//		FRAME SETTINGS
		frm.setSize(800,600);
		frm.setVisible(true);
		frm.setLayout(null);
		
//		ADD COMPONENTS
		frm.add(cbTerms);
		frm.add(rbMale);
		frm.add(rbFemale);
		frm.add(lblOutput);
		frm.add(txtFirstName);
		frm.add(txtLastName);
		frm.add(lblFirstName);
		frm.add(lblLastName);
		frm.add(btnSubmit);
	}
}
