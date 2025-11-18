#include <stdio.h>

int main(void) {

// examples of data types for each var
// with format specifiers for each data type
// also included: alternative format specifiers that can be used for the same data type
  
int numType = 1;
int numType2 = 2;
int memAddr = 3;
int octal = 4;
int hex = 414141;
int hexUpper = 414141;
int ptr = 10;                    // this is to be called via %p (pointer address specifier) 
unsigned int foo; 
float floatType = 1.23;  
float floatType2 = 2.34;
float floatType3 = 3.45;
float floatType4 = 4.56;
float floatType5 = 5.67;
float floatType6 = 6.78;
char charType = "a";
char strType[] = "string example";
double dblType = 13.37;
char IO[] = "abcdefghijk";
char IO[12] = "abcdefghijk";      // array size set to "12" since string is 11 chars + 1 additional char for null terminator
long long1 = 1333333337;
long long2 = 1333333337;
int unsignedInt = 12345;
long unsignedLong = 3133333333337;
long long longInt = 1222222222222222222222222222222222222222222222222222222222212345;
unsigned long long longInt2 = 122222222222244444422222222222225555222222222233333222222212345;
long double longDbl = 3.1415926535897932384626433832795029L;
  
printf("%d\n", numType);
printf("%i\n", numType2);       // alternative format specifier for int (%i)
printf("%f\n", floatType);
printf("%F\n", floatType2);     // alternative format specifier for "float" (%F)
printf("%e\n", floatType3);     // alternative format specifier for "float" (%e)
printf("%E\n", floatType4);     // alternative format specifier for "float" (%E)
printf("%c\n", charType); 
printf("%s\n", strType);
printf("%lf\n", dblType);
printf("%p\n", &a);             // address format specifier / pointer address specifier (%p)
printf("%u\n", foo);            // unsigned int format specifier
printf("%o\n", octal);          // unsigned octal number for int 
printf("%x\n", hex);            // unsigned hex number for int (lowercase)
printf("%X\n", hexUpper);       // unsigned hex number for int (uppercase)
printf("%20s\n", IO);           // number after % specifies minimum field width to be printed
printf("%-20s\n", IO);          // the - char specifies left alignment
printf("%20.5s\n", IO);         // the . char separates field width with precision  
printf("%-20.5s\n", IO);        // combination of left alignment + minimum field width + field width precision
printf("%g\n", floatType5);     // float type with current position 
printf("%G\n", floatType6);     // alternative format identifier for float type with current position 
printf("%ld\n", long1);
printf("%li\n", long2);         // alternative format specifier for "long" (%li)
printf("%lu\n", unsignedInt);
printf("%lu\n", unsignedLong);  // %lu format specifier can be used for both unsigned int and unsigned long
printf("%lli\n", longInt);
printf("%lld\n", longInt2);     // alternative format identifier for "long long int"
printf("%%");                   // prints "%"
printf("%n\n");                 // prints nothing
printf("%Lf\n", longDbl);  

return 0;

 }
