#include <iostream> 
#include <iomanip>
using namespace std; 
  
int main() {
   int i, n;
  
   n = 6;
     
   cout << "In bang nhan:" << endl;
     
   for(i = 1; i <= 10; i++) {
      cout << setw(2) << n << " x " << setw(2) << i << 
          " = " << setw(2) << n*i << endl;
   }
  
   return 0;
}
