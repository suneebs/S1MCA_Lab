#include<stdio.h>
#include<stdlib.h>

void main(){
    struct node{
        int a;
        struct node * next;
    }*temp,*newnode,*top=NULL,*cur;

    int max,c=0;
    void push(){
        printf("\nEnter data: ");
        int d;
        scanf("%d",&d);
        newnode=(struct node *)malloc(sizeof(struct node));         
        newnode->a=d;
        newnode->next=NULL;

        if (top == NULL)
        {
            top =newnode;
            c++;
        }
        else if(c==max){
            printf("stack full");
        }
        else{
            temp=top;
            while(temp->next!=NULL)
                temp=temp->next;
            temp->next=newnode;
            c++;
        }
        
    }

void display(){
    temp =top;
    if (c==0)
    {
        printf("\nStack is empty");
    }
    else{
    while (temp!=NULL)
    {
        printf("%d->",temp->a);
        temp=temp->next;
    }
    }
    
}

void pop(){
    if (c==0)
    {
        printf("\nStack underflow");
    }
    else if(top->next==NULL){
        free(top);
        c--;
        top=NULL;
    }
    else{
        cur=temp=top;
        temp=temp->next;
        while (temp->next!=NULL)
        {
            cur=cur->next;
            temp=temp->next;
        }
        cur->next=NULL;
        c--;
    }
    
}

printf("\nEnter max size of stack: ");
scanf("%d",&max);
        int ch;
    do{
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
        case 4:
            exit(0);
        default:
            break;
        }
    }while(ch<4);
}