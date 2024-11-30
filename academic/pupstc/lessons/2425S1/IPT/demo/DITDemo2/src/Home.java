
public class Home {
	public static void main(String args[]) {
		String[][] users = {
				{"John", "Doe", "4232", "C1"},
				{"Bill", "Gates", "4027", "C1"},
				{"Jane", "Air", "4232", "C2"},
				{"Steve", "Jobs", "4217", "C3"},
				{"Charles", "Babbage", "4232", "C1"}
		};
		
		String[][] cities = {
				{"4232", "Tanauan City"},
				{"4220", "Talisay"},
				{"4027", "Calamba City"},
				{"4234", "Santo Tomas City"},
				{"4217", "Lipa City"}
		};
		
		String[][] companies = {
				{"C1", "ABC Incorporated"},
				{"C2", "XYZ Company"},
				{"C3", "JKL Company"}
		};
		
		for(int i = 0; i<users.length; i++) {
			System.out.println("Full name: " + users[i][0] + " " + users[i][1]);
			
			for(int j = 0; j<cities.length; j++) {
				if(users[i][2] == cities[j][0]) {
					System.out.println("City: " + cities[j][1]);
				}
			}
			
			for(int j = 0; j<companies.length; j++) {
				if(users[i][3] == companies[j][0]) {
					System.out.println("Company: " + companies[j][1]);
				}
			}
			System.out.println("\n");
		}
	}
}
