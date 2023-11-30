#include<stdio.h>
#include<stdlib.h>
struct node{
    int data;
    struct node *next,*prev;
}*head =NULL,*temp,*newnode,*tail;

void main(){

    void create(){

    for(int i=0;i<5;i++){
        newnode=(struct node *)malloc(sizeof(struct node));
        newnode->data=i+1;
        newnode->next=NULL;
        newnode->prev=NULL;

        if(head==NULL)
        head=temp=newnode;
        else{
            temp->next=newnode;
            newnode->prev=temp;
            temp=newnode;
        }
    }
    }
    void display(){
        temp=head;
        while(temp!=NULL){
            printf("%d->",temp->data);
            temp=temp->next;
        }
    }
create();
display();

    void insertion(){
        int ch;
        void beg(){
            printf("\nEnter data\n");
            newnode=(struct node *)malloc(sizeof(struct node));
            scanf("%d",&newnode->data);
            newnode->next=head;
            newnode->prev=NULL;
            head=newnode;
        }
        void end(){
            printf("\nEnter data\n");
            newnode=(struct node *)malloc(sizeof(struct node));
            scanf("%d",&newnode->data);
            newnode->next=NULL;
            temp=head;
            while(temp->next!=NULL){
                temp=temp->next;
            }
            temp->next=newnode;
            newnode->prev=temp;

            
        }
        void pos(){
            int pos;
            printf("\nEnter position\n");
            scanf("%d",&pos);
            printf("\nEnter data\n");
            newnode=(struct node *)malloc(sizeof(struct node));
            scanf("%d",&newnode->data);
            newnode->next=NULL;

            temp=tail=head;
            temp=temp->next;
            for(int i=1;i<pos-1;i++){
                tail=tail->next;
                temp=temp->next;
            }
            if(pos==1){
                newnode->next=head;
                head=newnode;
            }
            else{
            newnode->next=temp;
            newnode->prev=temp->prev;
            tail->next=newnode;
            }

        }
        printf("\n Where do you want to insert?\n 1.Beginning\n 2.End\n 3.At given position\n");
        scanf("%d",&ch);
        switch(ch){
            case 1:beg();
                   break;
            case 2: end();
                    break;
            case 3: pos();
                    break;
            default:printf("Enter valid option");
        }

    }

    void deletion(){

        void d_beg(){
            temp=head;
            head=head->next;
            head->prev=NULL;
            free(temp);
        }
        void d_end(){
            temp=tail=head;
            temp=temp->next;
            while(temp->next!=NULL){
                temp=temp->next;
                tail=tail->next;
            }
            tail->next=NULL;
            free(temp);

        }
        void d_pos(){
            int pos;
            printf("\nEnter position\n");
            scanf("%d",&pos);
            temp=tail=head;
            temp=temp->next;
            for(int i=1;i<pos-1;i++){
                temp=temp->next;
                tail=tail->next;
            }
            
            tail->next=temp->next;
            temp=temp->next;
            temp->prev=tail;
            // free(temp);
        }
        
        int ch;
        printf("\n Where do you want to delete?\n 1.Beginning\n 2.End\n 3.At given position\n");
        scanf("%d",&ch);
        switch(ch){
            case 1:d_beg();
                   break;
            case 2: d_end();
                    break;
            case 3: d_pos();
                    break;
            default:printf("Enter valid option");
        }
    }

    // revrseing linked list
    void reverse(){
        temp=head;
        while (temp->next!=NULL)
        {
            temp=temp->next;
        }
        while (temp!=NULL)
        {
            printf("%d->",temp->data);
            temp=temp->prev;
        }
        
    }




    int ch=1,choice;
    while(ch){
        printf("\n1.Insertion\n2.Deletion\n3.Display\n4.reverse\n5.exit\nEnter your choice\n");
        scanf("%d",&choice);
        switch(choice){
            case 1: insertion();
                    break;
            case 2: deletion();
                    break;
            case 3: display();
                    break;
            case 4: reverse();
                    break;
            case 5: exit(0);
            default:printf("Enter valid choice");
        }
        printf("\nDo you want to continue?(0/1)\n");
        scanf("%d",&ch);
    }


}