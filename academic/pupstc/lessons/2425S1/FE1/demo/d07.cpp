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
  int currentColorNum = 0;
  string colors[] = {"STOP!", "GO!", "SLOW!"};
  int counts[] = {5, 10, 3};

  while (true)
  {
    cout << colors[currentColorNum] << "\n";
    count(counts[currentColorNum]);
    currentColorNum += 1;
    currentColorNum = currentColorNum == 3 ? 0 : currentColorNum;
  }

  return 0;
}
