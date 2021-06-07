#include<stdio.h>j
#include<conio.h>
main()
{
	float h,l,chinh,them,luong;
	printf("nhap so gio lam : ");
	scanf("%f",&h);
	printf("luong/gio :");
	scanf("%f",&l);
	if(h>0&h<=40)
		{
			them=0;
			chinh=h*l;
		}
	else 
		{
			them= (h-40)*l*1.5;
			chinh=40*l;
		}
	luong= chinh+them ;
	printf("tong luong la :%7.1f ",luong);
	getch();
}
