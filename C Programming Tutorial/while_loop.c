#include <stdio.h>

int main() {
  int a = 0;
  int b = 10;
  int c = 0;
  
  while (a <= 10) {
    printf("Value is: %d\n", a);
      // Counts from 0 to 10
    a++;
  }
  
  printf("\n\n");
  
  while (b >= 0) {
    printf("Value is: %d\n", b);
      // Counts from 10 to 0
    b--;
  }
  
    printf("\n\n");
  
  while (c == 0) {
    printf("endless\n");
      // Loops forever
  }
  
  return 0;
}
