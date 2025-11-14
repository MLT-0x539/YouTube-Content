#include <stdio.h>

int main(void) {

    int userIntegerInput;
    char userCharInput;
	char userStrInput[100];       // C has no "string" data type so instead we use an array of chars

    scanf("%d", &userIntInput);   // reading integer input
    scanf("%c", &userCharInput);  // reading char input
	scanf("%c", &userStrInput);   // reading string input
	
    printf("%d\n", n);
    return 0;
	
}
