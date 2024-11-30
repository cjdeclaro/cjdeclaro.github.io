#include <iostream>
#include <chrono>
#include <thread>

using namespace std;
using namespace std::this_thread;
using namespace std::chrono;

void count(int number)
{
  for (int i = 1; i <= number; i++)
  {
    sleep_for(nanoseconds(10));
    sleep_until(system_clock::now() + seconds(1));
    cout << i << "\n";
  }
}

int main()
{
  // STATE PATTERN
  string currentColor = "red";

  while (true)
  {
    if (currentColor == "red")
    {
      cout << "STOP!\n";
      count(5);
      currentColor = "green";
    }
    if (currentColor == "green")
    {
      cout << "GO!\n";
      count(10);
      currentColor = "orange";
    }
    if (currentColor == "orange")
    {
      cout << "SLOW!\n";
      count(3);
      currentColor = "green";
    }
  }

  return 0;
}
