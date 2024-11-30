using namespace std;
#include <iostream>
#include <string>

string getColor(int i)
{
  string colors[] = {"Pink", "White", "Red", "Blue", "Yellow", "Green"};
  return colors[i];
}

void rollDice()
{
  srand(time(0));
  for (int i = 0; i < 3; i++)
  {
    int randNum = rand() % 6;
    cout << getColor(randNum) << "\n";
  }
}

int main()
{
  rollDice();
  return 0;
}
