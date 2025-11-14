#include <stdio.h>

int main(void) {

char one[8] = "example"; // array size is set to "8" for a 7 char string, to account for the null terminator char       
char twoe[5] = {'f','o','o', '\0'}; // better representation of array of chars (w/ null terminator char included visually)

puts(one); // outputs string to stdout
fputs(one); // outputs string to any output stream, not just stdout
printf("\"%s\"", two); // another method of printing string

return 0;

}
