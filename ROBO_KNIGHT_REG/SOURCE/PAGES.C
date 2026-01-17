#include "../include/pages.h"
#include <stdlib.h>
void Page_Init(PAGE_ *p)
{
    if (!p) return;
    p->type = PAGE_OBJ_NONE;
    p->object = NULL;
}

void Page_Attach(PAGE_ *p, void *obj, PAGE_OBJ_TYPE_ type)
{
    if (!p) return;
    p->type = type;
    p->object = obj;
}

void *Page_Get(const PAGE_ *p)
{
    if (!p) return NULL;
    return p->object;
}

PAGE_OBJ_TYPE_ Page_GetType(const PAGE_ *p)
{
    if (!p) return PAGE_OBJ_NONE;
    return p->type;
}
