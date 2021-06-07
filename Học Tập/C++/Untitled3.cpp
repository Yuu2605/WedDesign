#include<conio.h>
#include<stdio.h>
float tb(int x[],float n);
float sx(int x[],float n);
float tong(int x[], float n) 
{	 float s=0; 
	for(int i=0;i<n;i++)
	 {
	 	if (x[i]>=0&i%2!=0)
	 	s+=x[i];  
	 }
	 return s;
}
float tb(int x[],float n)
	{
		float s=0;
		float b; 
	for(int i=0;i<n;i++)
	 {
	 	if (i%5==0||i%5==1)
	 	s+=x[i];  
	 }
	 return b=s/n;	 
	}
float sx(int x[],float n)
{
 for(int i=0;i<n-1;i++)
  for(int j=i+1;j<n;j++)
   {
    if(x[i]<x[j])
     {
       int t=x[i];
      	 x[i]=x[j];
      	 x[j]=t;
     }
   }
 	printf("\nmang sap xep tang la: "); 
	for(int i=0;i<n;i++)
	{
		printf (" %d ",x[i]);
	}
}
main()
{
	int n;
	float b; 
	int a[50];
	int s,s1; 
	printf("Nhap n =");
	scanf("%d",&n); 
	
	for(int i=0;i<n;i++)
	{
	printf("[%d]=",i);
	scanf("%d",&a[i]);
	}
	printf("\nIn Mang Ra\n");

	for(int i=0;i<n;i++)
	{
	printf ("%d ",a[i]);
	}
	s=0; 
	
	 
	 printf("\n\nTong cac phan tu cua mang =%2.f",tong(a,n)); 
	 printf("\n\nTBC cac phan tu cua mang   =%2.f",tb(a,n));
	 sx(a,n); 
}3
