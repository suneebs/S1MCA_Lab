#include<stdio.h>

void main(){
    int n,m,j=0;
    printf("no. of alements in Array 1 : ");
    scanf("%d",&n);
    int a[n];
    printf("Enter array elements:\n");
    for (int i = 0; i < n; i++)
    {
        scanf("%d",&a[i]);
    }
    printf("no. of alements in Array 2 : ");
    scanf("%d",&m);
    int b[m];
    printf("Enter array elements:\n");
    for (int i = 0; i < m; i++)
    {
        scanf("%d",&b[i]);
    }
    printf("array 1:");
    for (int i = 0; i < n; i++)
    {
        printf("%d ",a[i]);
    }
    printf("\narray 2:");
    for (int i = 0; i < m; i++)
    {
        printf("%d ",b[i]);
    }

for (int i = n; i < (n+m); i++)
{
    a[i]=b[j];
    j++;
}
printf("\nMerged array:");
for (int i = 0; i < (n+m); i++)
{
    printf("%d ",a[i]);
}



}