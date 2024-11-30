
public class Animal {
	String name;
	String kind;
	private Person owner;
	
//	CONSTRUCTOR
	public Animal(String n, String k) {
		this.name = n;
		this.kind = k;
	}
	
	public void setOwner(Person p) {
		this.owner = p;
	}
	
	public void eat() {
		System.out.println(name + " the " + kind + " is eating.");
	}
	
	public void sayOwner() {
		if(owner == null) {
			System.out.println(name + " is not yet adopted");
		} else {
			System.out.println(name + " is owned by " + owner.getFullName());
		}
	}
	
	public void sayHelloTo(Animal a) {
		System.out.println(name + ": Hello " + a.name + "!");
	}
}
