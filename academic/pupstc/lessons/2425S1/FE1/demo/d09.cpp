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

float printReceiptRow(float counter[], string names[], float prices[])
{
    float totalValue = 0;
  for (int i = 0; i < 4; i++)
  {
    if (counter[i] > 0)
    {
      cout << counter[i] << "\t\t" << names[i] << " @ " << prices[i] << "\t\t" << (prices[i] * counter[i]) << "\n";
    }

    totalValue += (prices[i] * counter[i]);
  }
  return totalValue;
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
  float beveragePrices[] = {
      40,
      40,
      40,
      40};
  float beverageCounter[] = {
      0,
      0,
      0,
      0};
  string mains[] = {
      "CHKN",
      "SPAG",
      "BSTK",
      "PLBK"};
  float mainPrices[] = {
      89,
      80,
      80,
      120};
  float mainCounter[] = {
      0,
      0,
      0,
      0};
  string sides[] = {
      "BRGR",
      "PIES",
      "FRIE",
      "SNDE"};
  float sidePrices[] = {
      60,
      40,
      55,
      45};
  float sideCounter[] = {
      0,
      0,
      0,
      0};

  int counter = 0;
  string cart[20];
  float cartValues[20];

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
      cartValues[counter] = beveragePrices[foodChoice];
      beverageCounter[foodChoice] += 1;
      break;
    case 2:
      cart[counter] = mains[foodChoice];
      cartValues[counter] = mainPrices[foodChoice];
      mainCounter[foodChoice] += 1;
      break;
    case 3:
      cart[counter] = sides[foodChoice];
      cartValues[counter] = sidePrices[foodChoice];
      sideCounter[foodChoice] += 1;
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

  float totalAmnt = 0;
  totalAmnt += printReceiptRow(beverageCounter, beverages, beveragePrices);
  totalAmnt += printReceiptRow(mainCounter, mains, mainPrices);
  totalAmnt += printReceiptRow(sideCounter, sides, sidePrices);

  cout << "\n---------------------------\n";

  string word = (isDineIn == "y") ? "Dine in" : "Take out";

  cout << word << " total: \t\t\t" << totalAmnt;

  return 0;
}
