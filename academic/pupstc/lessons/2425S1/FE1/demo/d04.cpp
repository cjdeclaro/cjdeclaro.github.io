using namespace std;
#include <iostream>
#include <string>

void sayHello()
{ // Function Declaration - empty
  cout << "Hello World" << "\n";
}

void sayTheName(string name, int age)
{
  cout << "I am " << name << ", " << age << "\n";
}

string add()
{
  return "no value given\n";
}

int add(int a)
{
  return a;
}

int add(int a, int b)
{
  return a + b;
}

int add(int a, int b, int c)
{
  return a + b + c;
}

int getCurrentYear()
{
  return 2024;
}

int main()
{
  sayHello(); // Function Call
  sayTheName("John", 23);
  cout << add(1) << "\n";
  cout << add(25, 1, 6) << "\n";
  cout << getCurrentYear() << "\n";

  return 0;
}
