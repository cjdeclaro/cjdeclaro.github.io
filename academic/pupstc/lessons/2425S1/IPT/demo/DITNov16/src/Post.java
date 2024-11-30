import java.awt.*;
import javax.swing.*;

public class Post extends JPanel {
	public Post(String name, String username) {
		this.setBackground(new Color(231,231,231));
		JLabel lblTitle = new JLabel(name);
		lblTitle.setBounds(10,5,90,20);
		
		JLabel lblUsername = new JLabel(username);
		lblUsername.setBounds(10,134,90,20);
		
		JPanel pnlPic = new JPanel();
		pnlPic.setBackground(new Color(186,186,186));
		pnlPic.setBounds(0,27,300,100);
		
		this.setLayout(null);
		this.add(lblTitle);
		this.add(pnlPic);
		this.add(lblUsername);
	}
}
