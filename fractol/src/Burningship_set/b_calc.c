/* ************************************************************************** */
/*                                                                            */
/*                                                        :::      ::::::::   */
/*   b_calc.c                                           :+:      :+:    :+:   */
/*                                                    +:+ +:+         +:+     */
/*   By: jbuys <marvin@42.fr>                       +#+  +:+       +#+        */
/*                                                +#+#+#+#+#+   +#+           */
/*   Created: 2016/09/29 09:20:13 by jbuys             #+#    #+#             */
/*   Updated: 2016/10/04 12:41:55 by jbuys            ###   ########.fr       */
/*                                                                            */
/* ************************************************************************** */

#include "../../includes/fractol.h"

t_mlx		b_color_change(t_mlx *env)
{
	env->values.color_iter = find_burningship(env);
	env->data[(env->values.x * 4) + (env->values.y * env->size_line)
		+ 1] = env->values.color_iter & 0x7F;
	env->data[(env->values.x * 4) + (env->values.y * env->size_line)] =
		env->values.color_iter & 0x6A;
	env->data[((int)env->values.x * 4) + (env->values.y * env->size_line)
		+ 2] = env->values.color_iter & 0x5F;
	return (*env);
}

double		b_map_to_real(int x, t_mlx *env)
{
	double		one;
	double		two;

	one = x - WIN_W / 1.5;
	two = 0.5 * env->values.zoom * WIN_W;
	return (1.2 * one / two + env->values.move_x);
}

double		b_map_to_imaginary(int y, t_mlx *env)
{
	double		one;
	double		two;

	one = y - WIN_H / 2;
	two = 0.5 * env->values.zoom * WIN_H;
	return (one / two + env->values.move_y);
}

int			find_burningship(t_mlx *env)
{
	int			i;
	double		or;
	double		oi;
	double		temp;

	i = 0;
	or = 0;
	oi = 0;
	while (i < env->values.max_iter && or * or + oi * oi < 4.0)
	{
		temp = or * or - oi * oi + env->values.cr;
		oi = 2.0 * fabs(or * oi) + env->values.ci;
		or = temp;
		i++;
	}
	return (i);
}

void		burningship_calc(t_mlx *env)
{
	while (env->values.y < WIN_H)
	{
		env->values.x = 0;
		while (env->values.x < WIN_W)
		{
			env->values.cr = b_map_to_real(env->values.x, env);
			env->values.ci = b_map_to_imaginary(env->values.y, env);
			b_color_change(env);
			env->values.x++;
		}
		env->values.y++;
	}
}
