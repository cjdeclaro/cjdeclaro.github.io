#include <iostream>
#include <string>
using namespace std;

int main()
{
  string users[10][10] = {
      {"John", "Doe", "32", "4234"},
      {"Bill", "Gates", "25", "4232"},
      {"Jane", "Air", "12", "4232"},
      {"Ada", "Lovelace", "54", "4027"},
      {"Steve", "Jobs", "2", "4220"}};

  string locations[10][10] = {
      {"4234", "Sto Tomas", "Batangas"},
      {"4027", "Calamba", "Laguna"},
      {"4220", "Talisay", "Batangas"},
      {"4217", "Lipa", "Batangas"},
      {"4232", "Tanauan", "Batangas"},
      {"4000", "San Pablo", "Laguna"},
  };

  for (int i = 0; i < 5; i++)
  {
    cout << "Full Name: " << users[i][0] + " " + users[i][1] << "\n";
    cout << "Age: " << users[i][2] << "\n";

    for (int j = 0; j < 6; j++)
    {
      if (users[i][3] == locations[j][0])
      {
        cout << "Location: " << locations[j][1] << ", " << locations[j][2] << "\n";
      }
    }
    cout << "\n";
  }

  return 0;
}
