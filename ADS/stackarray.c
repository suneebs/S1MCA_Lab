#include<stdio.h>
void main(){
    int max=5,a[5],top=-1;
    void push(){
        if (top == max-1)
        {
            printf("\nStack overflow");
        }else{
            int n;
            printf("\nEnter the element to push: ");
            scanf("%d",&n);
            top++;
            a[top]=n;
            printf("\n %d is pushed to the stack\n",n);
        }
    }
    void display(){
        if (top==-1)
        {
            printf("Stack is empty");
        }
        else{
           printf("\n Elements in stack: ");
            for (int i = 0; i <= top; i++)
            {
                printf("%d ",a[i]);
            }
            
        }
        
    }
    void pop(){
        if (top==-1)
        {
            printf("Stack underflow");
        }else{
            int e= a[top];
            top--;
            printf("%d is popped\n",e);
        }
    }

    void peek(){
        if (top==-1)
        {
            printf("No element in stack");
        }else{
            printf("\nelement on top :%d",a[top]);
        }
    }
    int ch=1;
do{
    printf("\n Enter the operation to be performed \n1.push \n2.pop \n3.display \n4.peek \n5.exit \n");
    int ch;
    scanf("%d",&ch);
    switch (ch)
    {
    case 1:
        push();
        break;
    case 2:
        pop();
        break;
    case 3:
        display();
        break;
    case 4:
        peek();
        break;
    case 5:
        exit(0);
    default:printf("Enter correct value");
        break;
    }
}while(ch != 5);
}