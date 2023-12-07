#include <stdio.h>
#define max 10
void uni(int a[],int b[]){
    int flag=0;
    int c[max],k=0,pos;
    for (int i = 0; i < 4; i++)
    {
        c[k]=a[i];
        k++;
    }
    
for (int i = 0; i < 4; i++)
{
    for (int j = 0; j < 4; j++)
    {
        if (a[i]==b[j])
        {
            flag =1;
            break;
        }
        else {
            flag =0;
            pos=j;
        }        
    }
    if (flag == 0)
    {
        c[k] = b[pos];
    }
    k++;
    
    
}

for (int i = 0; i < max; i++)
{
    printf("%d\t",c[i]);
}


    
}

void main(){
    int U[] = {1,2,3,4,5,6,7,8,9,10};
    int a[]={1,3,5,7};
    int b[]={1,5,8,9};
for (int i = 0; i < 10; i++)
{
    printf("%d\t",U[i]); 
}
printf("\n");
uni(a,b);
}