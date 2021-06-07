#include<stdio.h>
#include<conio.h>

float Tinh(float x)
{
	float ketqua;
	if(x >= 0)
		ketqua = x * x ;
	else
		ketqua = -5 * x * x + 1;
	return ketqua;

}
int main()
{
	float x;
	printf("\nNhap x: ");
	scanf("%f", &x);
	float ketqua = Tinh(x);
	printf("\nKet qua = %f", ketqua);

	getch();
	return 0;
}
