#include <iostream> 
#include <iomanip>
using namespace std; 
  
int main() {
   int i, j, count;
   int start, end;
  
   start = 2, end = 10;
  
   cout << "In bang cuu chuong rut gon:" << endl;
   for(i = start; i <= end; i++) {
      count = i;
  
      for(j = 1; j <= 10; j++) {
         cout << setw(4) << count*j;
      }
  
      cout << endl;
   }
  
   return 0;
}
