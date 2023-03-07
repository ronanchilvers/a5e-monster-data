---
statblock: true
name: 'Shadow - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Medium
type: Undead
cr: 1
ac: 12
hp: 18
hit_dice: 4d8
speed: '40 ft.'
stats:
    - 6
    - 14
    - 10
    - 8
    - 10
    - 14
damage_resistances: 'acid, cold, fire, lightning, thunder; damage from nonmagical weapons'
damage_immunities: 'necrotic, poison'
condition_immunities: 'charmed, fatigue, frightened, grappled, paralyzed, petrified, poisoned, prone, restrained'
'damage vulenrabilities': radiant
skillsaves:
    - { stealth: 4 }
senses: 'darkvision 120 ft., passive Perception 10'
traits:
    - { name: Amorphous, desc: 'The shadow can pass through an opening as narrow as 1 inch wide without squeezing.' }
    - { name: 'Sunlight Weakness', desc: 'While in sunlight, the shadow has disadvantage on attack rolls, ability checks, and saving throws.' }
    - { name: 'Undead Nature', desc: "A shadow doesn't require air, sustenance, or sleep." }
actions:
    - { name: Claw, desc: "Melee Weapon Attack: +4 to hit, reach 5 ft., one creature. Hit: 9 (2d6 + 2) necrotic damage, and the target makes a DC 12 Constitution saving throw. On a failure, the target is cursed until it finishes a short or long rest or is the subject of remove curse or a similar spell. While cursed, the target makes attack rolls, Strength checks, and Strength saving throws with disadvantage. If the target dies while cursed, a new undead shadow rises from the corpse in 1d4 hours, the corpse no longer casts a natural shadow, and the target can't be raised from the dead until the new shadow is destroyed." }
'bonus actions':
    - { name: 'Shadow Sneak', desc: 'The shadow takes the Hide action even if obscured only by dim light or darkness.' }
combat:
    - { name: 'If in shadow or darkness, the shadow attacks, hides, and then moves away from its target', desc: 'If in bright light, the shadow flees to a darker area. Shadows only attack creatures in bright light if they outnumber their foe two to one or more. If a shadow retreats, it follows a creature it has cursed.' }

---
```statblock
monster: Shadow - A5E
```
