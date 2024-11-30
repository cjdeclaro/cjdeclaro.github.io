import java.awt.*;
import javax.swing.*;

public class Grid {
	public static void main(String[] args) {
		JFrame frmBorder = new JFrame("Grid Demo");
		
		JPanel pnlMain = new JPanel();
		pnlMain.setBackground(new Color(107, 159, 255));
		
		JButton btnUp = new JButton("Up");
		JButton btnDown = new JButton("Down");
		JButton btnLeft = new JButton("Left");
		JButton btnRight = new JButton("Right");
		JButton btnCenter = new JButton("Center");
		
		frmBorder.add(btnDown);
		frmBorder.add(btnLeft);
		frmBorder.add(btnRight);
		frmBorder.add(btnCenter);
		
		frmBorder.setLayout(new GridLayout(3,2));
		frmBorder.setSize(800, 500);
		frmBorder.setVisible(true);
	}
}
