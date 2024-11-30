using namespace std;
#include <iostream>
#include <string>

void printArray(int counter, string arr[], string word)
{
  cout << "\n"
       << word << ":\n";
  for (int i = 0; i < counter; i++)
  {
    cout << "[" << i + 1 << "] " << arr[i] << "\n";
  }
}

int main()
{
  string isDineIn = "";
  string mealCategories[] = {
      "Beverages",
      "Mains",
      "Sides"};
  string beverages[] = {
      "COKE",
      "SPRT",
      "RYAL",
      "ITEA"};
  string mains[] = {
      "CHKN",
      "SPAG",
      "BSTK",
      "PLBK"};
  string sides[] = {
      "BRGR",
      "PIES",
      "FRIE",
      "SNDE"};

  int counter = 0;
  string cart[20];

  cout << "Dine In? [y/n]: ";
  cin >> isDineIn;

  string checkout = "n";
  do
  {

    printArray(3, mealCategories, "CHOOSE MEAL");

    int mealChoice = 0;
    cout << "\nChoice:";
    cin >> mealChoice;

    switch (mealChoice)
    {
    case 1:
      printArray(4, beverages, "BEVERAGES");
      break;
    case 2:
      printArray(4, mains, "MAINS");
      break;
    case 3:
      printArray(4, sides, "SIDES");
      break;
    }

    int foodChoice = 0;
    cout << "\nChoice:";
    cin >> foodChoice;
    foodChoice -= 1;

    switch (mealChoice)
    {
    case 1:
      cart[counter] = beverages[foodChoice];
      break;
    case 2:
      cart[counter] = mains[foodChoice];
      break;
    case 3:
      cart[counter] = sides[foodChoice];
      break;
    }

    cout << "\n\nCART:\n";
    for (int i = 0; i <= counter; i++)
    {
      cout << cart[i] << "\n";
    }

    cout << "\nCHECKOUT? [y/n]: ";
    cin >> checkout;

    if (checkout == "n")
    {
      counter += 1;
      cout << "\n\n";
    }

  } while (checkout == "n");

  cout << "\n\n---------------------------\n";
  cout << "\t\t BSIT STORE\n";
  cout << "\t\tPUP Sto Tomas";
  cout << "\n\n---------------------------\n";
  cout << "\t\tI N V O I C E\n\n";

  cout << "Qty\t\tDesc\t\t\tAmnt\n";

  for (int i = 0; i <= counter; i++)
  {
    cout << 2 << "\t\t" << cart[i] << "\t\t\t" << 50.00 << "\n";
  }

  cout << "\n---------------------------\n";

  string word = (isDineIn == "y") ? "Dine in" : "Take out";

  cout << word << " total: \t\t\t50.00";

  return 0;
}