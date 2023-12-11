#include <stdio.h>
#define max 10
////////////////////////////////////////////////////////////////////
//union
void uni(int a[],int b[],int s1,int s2){
    printf("\nUnion is:\n");
    int flag=0;
    int c[max],k=0,pos;
    for (int i = 0; i < s1; i++)
    {
        c[k]=a[i];
        k++;
    }
    
for (int i = 0; i < s2; i++)
{
    for (int j = 0; j < s1; j++)
    {
        if (b[i]==a[j])
        {
            flag =1;
            break;
        }
        else {
            flag =0;
            pos=i;
        }        
    }
    if (flag == 0)
    {
    
        c[k] = b[pos];
        k++;
    }
    
    
}
for (int i = 0; i < k; i++)
{
    printf("%d ",c[i]);
}
}
///////////////////////////////////////////////////////////
//intersection
void intersection(int a[],int b[],int s1,int s2){
    printf("\nIntersection is:\n");
    int c[max],k=0;
    for (int i = 0; i < s1; i++)
    {
        for (int j = 0; j < s2; j++)
        {
            if (a[i]==b[j])
            {
                c[k]=a[i];
                k++;
            }
            
        }
        
    }
    for (int i = 0; i < k; i++)
    {
        printf("%d ",c[i]);
    }
    
    
}
//////////////////////////////////////////////////////////////////////////
// BIT String
void bit(int a[],int b[],int u_size,int s){
    printf("\nBit String is:\n");
    int c[max],k=0,flag=0;
    for (int i = 0; i < u_size; i++)
    {
        for (int j = 0; j < s; j++)
        {
            if (a[i]==b[j])
            {
                flag= 1;
                break;
            }
            else{
                flag=0;
            }
            
          
        }
        if (flag == 1)
        {
           c[k]=1;
        }
        else
    {
        c[k]=0;
    }
    k++;
        
        
    }
    for (int i = 0; i < k; i++)
    {
        printf("%d ",c[i]);
    }

}
void main(){
    int u_size,s1,s2;
    printf("Enter the size of universal set (max 10)\n");
    scanf("%d",&u_size);
    int U[u_size];
    for (int i = 0; i < u_size; i++)
    {
        scanf("%d",&U[i]);
    }
    printf("Enter the size of set 1\n");
    scanf("%d",&s1);
    int set1[s1];
    printf("Enter set 1\n");
    for (int i = 0; i < s1; i++)
    {
        scanf("%d",&set1[i]);
    }
    printf("Enter the size of set 2\n");
    scanf("%d",&s2);
    int set2[s2];
    printf("Enter set 2\n");
    for (int i = 0; i < s2; i++)
    {
        scanf("%d",&set2[i]);
    }
    // int U[] = {1,2,3,4,5,6,7,8,9,10};
    // int set1[]={1,3,4,7};
    // int set2[]={1,5,3,10};
// for (int i = 0; i < u_size; i++)
// {
//     printf("%d ",U[i]); 
// }
printf("\n");
uni(set1,set2,s1,s2);
intersection(set1,set2,s1,s2);
bit(U,set1,u_size,s1);
}