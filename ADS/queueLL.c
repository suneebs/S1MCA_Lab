#include<stdio.h>
#include<stdlib.h>
void main(){
    struct node{
        int data;
        struct node* next;
    }*head=NULL,*newnode,*temp;
int max,c=0;
    void push(){
        newnode=(struct node*)malloc(sizeof(struct node));
        printf("\nEnter data: ");
        int d;
        scanf("%d",&d);
        newnode->data=d;
        newnode->next=NULL;

        if(c==max){
            printf("\nQueue is full");
        }
        else if (head==NULL)
        {
            head=newnode;
            c++;
        }
        else{
            temp=head;
            while (temp->next!=NULL)
            {
                temp=temp->next;
            }
            temp->next=newnode;
            c++;
            
        }
        

    }

void display(){
    if (head == NULL)
    {
        printf("Queue is empty");
    }
    else
    {
        temp=head;
        while (temp!=NULL)
        {
            printf("%d->",temp->data);
            temp=temp->next;
        }
        
    }
    
    
}

void pop(){
    if (head == NULL)
    {
        printf("Queue is empty");
    }
    else if (head->next == NULL){
        head=NULL;
        c--;
    }
    else{
        head=head->next;
        c--;
    }
    
}



printf("Enter max element in queue: ");
scanf("%d",&max);
    int ch;
    do
    {
        printf("\n1: Push\n2: pop\n3:Display\n4:Exit\nEnter your choice: ");
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
        default:
            break;
        }
    } while (ch<4);
    
}