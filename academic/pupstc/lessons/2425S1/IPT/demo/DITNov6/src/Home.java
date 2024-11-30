import java.awt.*;
import javax.swing.*;

public class Home {
	public static void main(String[] args) {
		JFrame frmBorder = new JFrame("Border Demo");
		
		JPanel pnlMain = new JPanel();
		pnlMain.setBackground(new Color(107, 159, 255));
		
		JButton btnUp = new JButton("Up");
		JButton btnDown = new JButton("Down");
		JButton btnLeft = new JButton("Left");
		JButton btnRight = new JButton("Right");
		JButton btnCenter = new JButton("Center");
		
		frmBorder.add(btnDown, BorderLayout.SOUTH);
		frmBorder.add(btnLeft, BorderLayout.WEST);
		frmBorder.add(btnRight, BorderLayout.EAST);
		frmBorder.add(pnlMain, BorderLayout.CENTER);
		
		frmBorder.setSize(800, 500);
		frmBorder.setVisible(true);
		frmBorder.setLayout(new BorderLayout());
	}
}
