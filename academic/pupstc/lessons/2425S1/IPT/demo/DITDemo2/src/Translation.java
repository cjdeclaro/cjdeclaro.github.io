
public class Translation {
	public static void main(String[] a) {
		String[][] words = {
				{"Hello", "Kumusta", "こんにちは"},
				{"world", "mundo", "世界"},
				{"I", "Ako", "私"},
				{"am", "si", "午前"}
		};
		
		String fname = "John";
		String lname = "Doe";
		int language = 2;
		
		System.out.println(words[0][language] + " " + words[1][language] + "!");
		System.out.println(words[2][language] + " " + words[3][language] + " " + fname + " " + lname);
	}
}
