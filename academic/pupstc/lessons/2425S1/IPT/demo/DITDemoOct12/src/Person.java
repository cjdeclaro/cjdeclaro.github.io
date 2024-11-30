
public class Person {
	String fname;
	String lname;
	
//	CONSTRUCTOR
	public Person(String f, String l) {
		this.fname = f;
		this.lname = l;
	}
	
	public String getFullName() {
		return fname + " " + lname;
	}
	
	public void sayHelloTo(Person p) {
		System.out.println(fname + ": Hello " + p.getFullName() + "!");
	}
}
