import java.awt.*;
import javax.swing.*;

public class Home {
	public static void main(String[] args) {
		//OBJECT
//		Post p1 = new Post("John Doe", "@johndoe");
//		p1.setBounds(10,10,300,200);
//		
//		Post p2 = new Post("Jane Air", "@jair");
//		p2.setBounds(10,220,300,200);
//		
//		Post p3 = new Post("Bill Gates", "@bg");
//		p3.setBounds(10,430,300,200);
		
		JFrame frm = new JFrame();
		frm.setVisible(true);
		frm.setLayout(null);
		frm.setSize(800,600);
		
		String[][] information = {
				{"John Doe", "@johndoe"},
				{"Bill Gates", "@bg"}
		};
		
		for(int i=0; i<information.length; i++) {
			Post p1 = new Post(information[i][0], information[i][1]);
			p1.setBounds(10,10+(i*210),300,200);
			
			frm.add(p1);
		}
	}
}
