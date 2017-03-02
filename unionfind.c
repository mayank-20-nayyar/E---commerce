#include<stdio.h>
#include<malloc.h>

struct node {
	int data;
	int rank;
	struct node *p;
};
struct node *temp[6],*t1,*t2,*t;
int j=0;

void MakeSet(int dat)
{
	temp[j] = (struct node*)malloc(sizeof(struct node));
	temp[j]->data = dat;
	temp[j]->rank = 0;
	temp[j]->p = temp[j];
	j++;
}

void Uni(int x,int y)
{
	int count=0,i;
	t1 = (struct node*)malloc(sizeof(struct node));

	
	
	for(i=0;i<j;i++)
	{
		if(temp[i]->data == x)
		{	
			t1 = temp[i];
			count++;
		}
		if(temp[i]->data == y)
		{
			t2 = temp[i];
			count++;
		}
		if(t1->rank>=t2->rank && count==2)
				Update(t1,t2);
		if(t1->rank<t2->rank && count==2)
				Update(*t2,*t1);
	}
}

void Update(struct node* t11,struct node* t22)
{
	struct node* tt;
	tt = (struct node*)malloc(sizeof(struct node));
	t22->p = t11;
	
	
	if(t22->rank == t11->rank)
		t11->rank++;
	
	if(t22->rank>0)
		t22->rank = 0;
	
	tt = Check(t11,t22);
	if(tt != t11)
		t11->rank = 0;
}

struct node* Check(struct node* tt1,struct node* tt2)
{
	t = (struct node*)malloc(sizeof(struct node*));
	t = tt1;
	while(1)
	{
		if(t = t->p)
		{
			tt2->p = t;
			break;
		}
		else
		{
			t = t->p;
		}
	}
	return t;
}

int main()
{
	int i;
	for(i=0;i<6;i++)
		MakeSet(i);
	
	Uni(1,2);
	
	return 0;
}

