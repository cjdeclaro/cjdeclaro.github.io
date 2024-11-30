import java.awt.event.MouseEvent;
import java.awt.event.*;
import java.util.*;
import javax.swing.*;

public class DemoUseless {
	public static void main(String[] args) {
		JFrame frmMain = new JFrame("Useless");
		JButton btnClick = new JButton("Click Me!");
		
		Random rand = new Random();
		
		btnClick.setBounds(10,10,100,50);
		
		btnClick.addMouseListener(new MouseListener() {
			public void mouseClicked(MouseEvent e) {
				
			}
			public void mousePressed(MouseEvent e) {
				
			}
			public void mouseReleased(MouseEvent e) {
				
			}
			public void mouseEntered(MouseEvent e) {
				int randomX = (rand.nextInt(400))+1;
				int randomY = (rand.nextInt(450))+1;
				btnClick.setBounds(randomX, randomY, 100, 50);
			}
			public void mouseExited(MouseEvent e) {
			}
		});
		
		frmMain.setSize(500, 500);
		frmMain.setVisible(true);
		frmMain.setLayout(null);
		
		frmMain.add(btnClick);
	}
}
