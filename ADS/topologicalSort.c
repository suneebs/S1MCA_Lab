#include<stdio.h>
void main(){
    int n;
    printf("Enter size of adjacency matrix: ");
    scanf("%d",&n);
    int a[n][n],v[n];
    printf("\nEnter array:\n");
    for (int i = 0; i < n; i++)
    {
        v[i]=0;
        for(int j=0;j<n;j++)
        scanf("%d",&a[i][j]);
    }
    printf("\nAdjancency matrix:\n");
    for (int i = 0; i < n; i++)
    {
        for(int j=0;j<n;j++)
        printf("%d ",a[i][j]);
        printf("\n");
    }

    printf("\nTopological sorting: ");
    for (int i = 0; i < n; i++)
    {
        int c=0;
        if (v[i] == 0)
        {
            for (int j = 0; j < n; j++)
            {
                if (a[j][i] !=0)
                {
                    c=1;
                    break;
                }
            }
            if (c == 0)
            {
                v[i]=1;
                printf("%d ",i );
                for (int j = 0; j < n; j++)
                {
                    a[i][j]=0;
                }
                
            }
            
            
        }
        
    }
    
    
    
}