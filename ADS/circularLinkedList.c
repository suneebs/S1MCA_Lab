#include<stdio.h>
#include<stdlib.h>
struct node{
    int data;
    struct node *next;
}*head=NULL,*newnode,*temp,*tail;
void main(){

void nodeCreation(){
newnode=(struct node *)malloc(sizeof(struct node));
printf("\nenter data\n");
scanf("%d",&newnode->data);
newnode->next=NULL;

}
void create(){
for (int i=1;i<=5;i++){
newnode=(struct node *)malloc(sizeof(struct node));
newnode->data=i;
newnode->next=NULL;
if (head==NULL)
{
    temp=head=newnode;
}
else{
    temp->next=newnode;
    temp=newnode;
    temp->next=head;
}
}    
}

void display(){
    temp=head;
    while(temp->next != head){
        printf("%d->",temp->data);
        temp=temp->next;
    }
    printf("%d",temp->data);
}
create();
display();
void insert(){
    printf("\nWhere do you want to insert?\n");

    void beg_insert(){
        nodeCreation();
        temp=head;
        while (temp->next != head)
        {
            temp=temp->next;
        }
        temp->next=newnode;
        newnode->next =head;
        head=newnode;
    }
    // beg_insert();
    void end_insert(){
        nodeCreation();
        while (temp->next != head)
        {
            temp=temp->next;
        }
        temp->next=newnode;
        newnode->next =head;

    }
    // end_insert();
    void pos_insert(){
        int pos;
        printf("\nEnter the position to insert\n");
        scanf("%d",&pos);
        nodeCreation();
        temp=head;
        for(int i=1;i<pos-1;i++)
            temp=temp->next;
        newnode->next=temp->next;
        temp->next=newnode;
    }
    // pos_insert();
    int choice;
    printf("\n1.at beginning\n2.at end\n3.at given position\n");
    scanf("%d",&choice);
    switch (choice)
    {
    case 1: beg_insert();
            break;
    case 2: end_insert();
            break;
    case 3: pos_insert();
            break;
    case 4: exit(0);
    default:printf("Enter valid value");
        break;
    }
}

/////////////////////////////////////////////////////////////////////////////////
//Deletion
void delete(){

    void beg_del()
    {
        temp=head;
        while (temp->next != head)
        {
            temp=temp->next;
        }
        temp->next=head->next;
        free(head);
        head=temp->next;
        

    }
    void end_del(){
        temp=tail=head;
        temp=temp->next;
        while (temp->next != head)
        {
            temp=temp->next;
            tail=tail->next;
        }
        tail->next=head;
        free(temp);        

    }
    void pos_del(){
        int pos;
        printf("\nEnter the position to insert\n");
        scanf("%d",&pos);
        temp=tail=head;
        temp=temp->next;
        for(int i=1;i<pos-1;i++){
            temp=temp->next;
            tail=tail->next;
        }        
        tail->next=temp->next;
        free(temp);
    }

    int choice;
    printf("\nWhere do you want to delete?\n");
    printf("\n1.at beginning\n2.at end\n3.at given position\n");
    scanf("%d",&choice);
    switch (choice)
    {
    case 1: beg_del();
            break;
    case 2: end_del();
            break;
    case 3: pos_del();
            break;
    case 4: exit(0);
    default:printf("Enter valid value");
            break;
    }
}
/////////////////////////////////////////////////////////////////////////////////////////
//Search
void search(){
    int ele,i=1;
    printf("Enter an element to search\n");
    scanf("%d",&ele);
    temp=head;
    while (temp->next != head)
    {
        if(temp->data == ele){
            printf("\nelement found at position %d",i);
            break;
        }
        temp=temp->next;
        i++;
    
    }
    if (temp->data == ele && temp->next == head)
    {
        printf("\nelement found at position %d",i);
    }
    
    
}

int choice,ch=1;

while (ch)
{
printf("\nEnter the choice\n1.insertion\n2.deletion\n3.search\n4.display\n5.exit\n");
scanf("%d",&choice);
    switch (choice)
    {
    case 1: insert();
            break;
    case 2: delete();
            break;
    case 3:search();
            break;
    case 4:display();
            break;
    case 5:exit(0);
    default:printf("\nEnter valid choice\n");
            break;
    }
}




}