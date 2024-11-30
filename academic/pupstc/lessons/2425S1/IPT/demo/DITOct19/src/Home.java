import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

import javax.swing.*;

public class Home {
	static boolean isSettingsOpened = false;
	
	public static void main(String[] args) {
		JFrame frmHome = new JFrame("Sample");
		
		frmHome.setSize(800, 800);
		frmHome.setVisible(true);
		frmHome.setLayout(null);
		
		JFrame frmMenu = new JFrame("Settings");
		
		JButton btnClick = new JButton("Open");
		btnClick.setBounds(650,50,100,50);
		
		btnClick.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				isSettingsOpened = !isSettingsOpened;
				frmMenu.setVisible(isSettingsOpened);
				btnClick.setText(isSettingsOpened ? "Close" : "Open");
			}
		});
		
		JComboBox cmbCity = new JComboBox();
		cmbCity.setBounds(10,100,150,80);
		cmbCity.addItem("Calamba");
		cmbCity.addItem("Tanauan");
		cmbCity.addItem("Sto Tomas");
		cmbCity.addItem("Lipa");
		
		frmMenu.setSize(400, 400);
		frmMenu.setVisible(false);
		frmMenu.setLayout(null);
		
		frmHome.add(btnClick);
		frmHome.add(cmbCity);
	}
}
