#include <stdio.h>

int main(void) {

 int number;

  printf("Please select a number between 1 and 10:\n");
  scanf("%d", &number);

 switch (number) {
  case 1:
    printf("You selected: ONE\n");
    break;
  case 2:
    printf("You selected: TWO\n");
    break;
  case 3:
    printf("You selected: THREE\n");
    break;
  case 4:
    printf("You selected: FOUR\n");
    break;
  case 5:
    printf("You selected: FIVE\n");
    break;
  case 6:
    printf("You selected: SIX\n");
    break;
  case 7:
    printf("You selected: SEVEN\n");
    break;
  case 8:
    printf("You selected: EIGHT\n");
    break;
  case 9:
    printf("You selected: NINE\n");
    break;
  case 10:
    printf("You selected: TEN\n");
    break;
   
  default:
    printf("OOPS! Looks like a number between 1 and 10 wasnt selected\n");
  }
  
 return(0);
 
}
