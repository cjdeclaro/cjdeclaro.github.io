#include <iostream>
using namespace std;

int main()
{
  string colors[6] = {"Pink", "White", "Yellow", "Blue", "Red", "Green"};

  cout << "CHOOSE A COLOR:\n";
  for (int i = 0; i < 6; i++)
  {
    cout << "[" << i + 1 << "] " << colors[i] << "\n";
  }

  // Get user input for color
  int choice;
  cout << "\nCHOICE:";
  cin >> choice;

  choice -= 1; // convert the choice to array index
  cout << "\nSELECTION: " << colors[choice];

  // Get the user input for the bet
  int bet = 0;
  cout << "\n\nBET AMOUNT:";
  cin >> bet;

  // Create a random seed
  srand(time(0));

  // Roll the dice
  int n = 6;
  int dice1 = rand() % n; // get 0 to 5
  int dice2 = rand() % n; // get 0 to 5
  int dice3 = rand() % n; // get 0 to 5

  cout << "\nROLLING...\n\nRESULTS:\n";

  // Show dice results
  cout << colors[dice1] << "!\n";
  cout << colors[dice2] << "!\n";
  cout << colors[dice3] << "!\n";

  // Check number of dice matched
  int win = 0;

  if (choice == dice1)
  {
    win += 1;
  }
  if (choice == dice2)
  {
    win += 1;
  }
  if (choice == dice3)
  {
    win += 1;
  }

  // Show bet results
  if (win > 0)
  {
    cout << "\nPrize: " << bet + (bet * win);
  }
  else
  {
    cout << "\nTry again!";
  }

  return 0;
}
