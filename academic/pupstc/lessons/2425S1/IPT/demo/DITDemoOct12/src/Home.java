public class Home {
	public static void main(String[] args) {
		Animal browny = new Animal("Browny", "Dog");
		Animal whitey = new Animal("Whitey", "Cat");
		Animal bruno = new Animal("Bruno", "Fish");
		Person john = new Person("John", "Doe");
		Person steve = new Person("Steve", "Jobs");
		Person bill = new Person("Bill", "Gates");

		whitey.setOwner(john);
		browny.setOwner(john);
		
		bruno.sayHelloTo(whitey);
		bruno.sayHelloTo(browny);
		browny.sayHelloTo(bruno);
		
		john.sayHelloTo(steve);
		steve.sayHelloTo(john);
	}
}
