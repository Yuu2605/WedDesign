#include<conio.h>
#include<stdio.h>
int main()
{
	int n,a[50];
	printf("Nhap vao so phan tu cua mang :");
	scanf("%d",&n);
	printf("Nhap vao cac phan tu cua mang:");
	for(int i=0;i<n;i++)
	{
		printf("\na[%d]=",i);
		scanf("%d",&a[i]);
	}
	printf("mang sau khi nhap la:");
	for(int i=0;i<n;i++)
	printf("%3d",a[i]);
	getch();
}
