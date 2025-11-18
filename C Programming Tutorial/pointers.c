#include <stdio.h>

int main() {
  int myPtr = 1337;         // An int variable
  int* ptr = &myPtr;        // A pointer variable, with the name ptr, that stores the address of myPtr

  printf("%d\n", myPtr);
  printf("%p\n", &myPtr);   // outputs memory address of myPtr int value
  printf("%p\n", ptr);      // outputs memory address of myPtr int value with "int *ptr"

  /*
    "ptr" points to "int MyPtr
     the "&" operator stores the memory address of the "myPtr" variable
     therefore "int* ptr = &myPtr results in the "ptr" var holding the value of the "MyPtr" var's memory address
  */

  return 0;
}
