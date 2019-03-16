#include <stdio.h>
#include <stdlib.h>

int main ()
{
  FILE *wynik;
  char tekst[] ="asdsadasdasd";
  if((wynik=fopen("tekst.txt","w"))==NULL)
	{
	  printf("Nie da sie otworzyc\n");
	exit(1);
	}
  fprintf (wynik,"%s",tekst);
  fclose (wynik);

}