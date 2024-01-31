#include<stdio.h>
void main(){
    int max=5,a[5],front= -1,rear=-1;
    
    void push(){
        if(rear == max-1){
            printf("\n Queue is Full");
        }else{
            if(front == -1)
                front=0;
            
                printf("\nEnter the element: ");
                int n;
                scanf("%d",&n);
                rear++;
                a[rear]=n;
        
        }
    }
    void display(){
        if(front == -1)
                printf("\nQueue is empty");
        else{
        printf("\nElements in queue: ");
        for (int i = front; i <=rear; i++)
        {
            printf("%d ",a[i]);
        }
        }
    }

    void pop(){
        if(front == -1)
        printf("Queue is empty");
        else{
            if (front == rear)
            {
                printf("\n%d is popped",a[front]);
                front=-1;
            }
            else{
            printf("\n%d is popped",a[front]);
            front++;
            }
        }
    }

    
    int ch=1;
    while (ch)
    {
        printf("\nEnter the operations to be performed\n 1.push\n 2.display\n 3.pop\n");
        int op;
        scanf("%d",&op);
        switch (op)
        {
        case 1:
            push();
            break;
        case 2:
            display();
            break;
        case 3:
            pop();
            break;
        default: printf("\nEnter correct value");
            break;
        }
        printf("\nDo you wanna continue?(1/0) ");
        scanf("%d",&ch);
    }
    
}