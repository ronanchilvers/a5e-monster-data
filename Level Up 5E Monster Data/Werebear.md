---
statblock: true
name: 'Werebear - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Medium
type: Humanoid
cr: 5
ac: 11
hp: 135
hit_dice: '18d8 + 54'
speed: '30 ft. (40 ft., climb 30 ft. in bear or hybrid form)'
stats:
    - 18
    - 10
    - 16
    - 10
    - 12
    - 12
damage_immunities: 'damage from nonmagical, non-silvered weapons'
skillsaves:
    - { perception: 4 }
senses: 'passive Perception 16'
languages: Common
traits:
    - { name: 'Keen Smell', desc: 'The werebear has advantage on Perception checks that rely on smell.' }
    - { name: Wolfsbane, desc: 'Lycanthropes are repelled by the wolfsbane flower. A lycanthrope in hybrid or beast form is poisoned while within 10 feet of a living or dried wolfsbane flower that it can smell. If wolfsbane is applied to a weapon or ammunition, lycanthropes are damaged by the weapon as if it were silver. An application of wolfsbane lasts for 1 hour.' }
actions:
    - { name: Multiattack, desc: 'The werebear makes two claw attacks, two greataxe attacks, or two handaxe attacks.' }
    - { name: 'Greataxe (Humanoid or Hybrid Form Only)', desc: 'Melee Weapon Attack: +7 to hit, reach 5 ft., one target. Hit: 10 (1d12 + 4) slashing damage.' }
    - { name: 'Handaxe (Humanoid or Hybrid Form Only)', desc: 'Melee or Ranged Weapon Attack: +7 to hit, reach 5 ft. or range 20/60 ft., one target. Hit: 7 (1d6 + 4) slashing damage.' }
    - { name: 'Claw (Bear or Hybrid Form Only)', desc: "Melee Weapon Attack: +7 to hit, reach 5 ft., one target. Hit: 10 (1d12 + 4) slashing damage. If the target is a Medium or smaller creature, it is grappled (escape DC 15). Until this grapple ends, the werebear can't use its greataxe and can't attack a different target with its claw." }
    - { name: 'Bite (Bear or Hybrid Form Only)', desc: 'Melee Weapon Attack: +7 to hit, reach 5 ft., one target. Hit: 11 (2d6 + 4) piercing damage. If the target is a humanoid, it makes a DC 14 Constitution saving throw. On a failure, it is cursed with werebear lycanthropy.' }
'bonus actions':
    - { name: Shapeshift, desc: "The werebear changes its form to a Large bear, a Large bear-humanoid hybrid, or into its true form, which is a humanoid. While shapeshifted, its statistics are unchanged except for its size. It can't speak in bear form. Its equipment is not transformed. It reverts to its true form if it dies." }
    - { name: 'Frenzied Bite (While Bloodied, Bear or Hybrid Form Only)', desc: 'The werebear makes a bite attack.' }
combat:
    - { name: 'If it wishes to hide its nature or avoid infecting others, the werebear fights with axes in humanoid form', desc: 'Otherwise, it attacks with its claws in hybrid form. When bloodied, it instinctively shifts to hybrid form and attacks with its claws and bite, fighting to the death.' }

---
```statblock
monster: Werebear - A5E
```
